<?php
class userController extends Controller
{
    public function __construct()
    {
        parent::construct();
    }
    public function account($model)
    {
        $movies = $this->catch_Sql->movies();
        $users = $this->catch_Sql->users();
        $movie_ticket = $this->catch_Sql->movie_ticket();
        $rows['movies'] = $movies;
        $rows['users'] = $users;
        $rows['movie_ticket'] = $movie_ticket;
        $_SESSION['userName'] = $users['userName'];
        $_SESSION['password'] = $users['password'];
        // $query = $name->seat_name($server);
        $this->view("Home/member", $rows);
        $this->server->close();
    }
}
