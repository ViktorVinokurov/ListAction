<?php
class Controller_Main extends Controller
{
    function __construct()
    {
        $this->model = new Model_main();
        $this->view = new View();
    }


    public function action_index()
    {
        $data = $this->model->get_data();
        $data1 = $this->model->addlisting($_POST["insertlist"]);
        $data2 = $this->model->removeaction($_GET['del_id']);
        $this->view->generate('main_view.php','template_view.php', $data, $data1, $data2);
    }

}
