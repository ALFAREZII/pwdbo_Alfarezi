<<<<<<< HEAD
<?php

class About extends Controller {
    public function index($nama = 'Dono', $pekerjaan = 'Pelawak')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] =  'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
=======
<?php

class About extends Controller {
    public function index($nama = 'Dono', $pekerjaan = 'Pelawak')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] =  'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
>>>>>>> 41f2624d6277b3a9def1ad9b61259ca811f6a95c
}   