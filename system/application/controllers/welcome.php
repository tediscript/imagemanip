<?php

class Welcome extends Controller {

    function Welcome() {
        parent::Controller();
    }

    function index() {
        $config = array(
            'image_library' => 'gd2',
            'source_image' => BASEPATH . 'upload_img/pit.jpg',
            'new_image' => BASEPATH . 'upload_img/pit_result.jpg',
            'maintain_ratio' => false,
            'width' => 150,
            'height' => 150,
            'x_axis' => 20,
            'y_axis' => 20
        );
        print_r($config);

        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
        if (!$this->image_lib->crop()) {
            echo $this->image_lib->display_errors();
        }
        $this->image_lib->clear();
    }

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */