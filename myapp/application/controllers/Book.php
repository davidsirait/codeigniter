<?php

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
    }

    public function index()
    {   
        $query = $this->Book_model->getBooks();
        $data['books'] = $query->result_array();

        $this->load->view('book',$data);
    }

    public function detail($url)
    {
        $query = $this->Book_model->getSingleBook('url', $url);
        $data['books'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        if($this->input->post())
        {
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');
            
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('cover'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                $data['cover'] = $this->upload->data()['file_name'];
            }

            $id = $this->Book_model->insertBook($data);

            if($id)
               { echo "Data Berhasil Disimpan";
                redirect('/');
               }
            else 
            {    
                echo "Data Gagal Disimpan";
            }
            
        }

        $this->load->view('form_add');
    }


    public function edit($id)
    {
        $query = $this->Book_model->getSingleBook('id',$id);
        $data['books'] = $query->row_array();
        
        if($this->input->post())
        {
            $post['title'] = $this->input->post('title');
            $post['content'] = $this->input->post('content');
            $post['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            
            $this->load ->library('upload',$config);

            if(!$this->upload->do_upload('cover'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                $post['cover'] = $this->upload->data()['file_name'];

            }
            $id_book = $this->Book_model->updateBook($id, $post);

            if($id_book)
                echo "Data Berhasil Disimpan";
            
            else 
                echo "Data Gagal Disimpan";
            
        }

        $this->load->view('form_edit',$data);
    }

    public function delete($id)
    {
        $this->Book_model->deleteBook($id);
        redirect('/');
    }

}