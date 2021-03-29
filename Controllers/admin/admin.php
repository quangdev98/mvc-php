<?php
class admin extends Controller{
    function index() {
  		$this->view('Admin/master',["Page"=>'index']);
    }
}