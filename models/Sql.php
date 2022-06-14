<?php
class Sql
{
    protected $link;
    public function __construct($ax)
    {
        $this->link = $ax;
    }
    public function users()
    {
        $result = mysqli_query($this->link, "SELECT * FROM users WHERE user_id = 1");
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    public function movies()
    {
        $result = mysqli_query($this->link, "SELECT * FROM movies");
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    public function movie_ticket()
    {
        $sql = "SELECT movie_ticket.ticket_id,
                       screenings.screen_id,
                       screenings.show_date,
                       screenings.show_time,
                       screenings.price,
                       movie_ticket.seat_name,
                       foods.name AS foodsName,
                       foods.price,
                       theaters.name AS theatersName,
                       cinemas.name AS cinemasName,
                       categorys.name AS categorysName,
                       movies.name AS moviesName,
                       movies.type              
                       FROM screenings
                       JOIN movie_ticket ON screenings.screen_id = movie_ticket.screen_id
                       JOIN foodall ON movie_ticket.ticket_id = foodall.ticket_id
                       JOIN foods ON foodall.food_id = foods.food_id
                       JOIN theaters ON theaters.theater_id = screenings.theater_id
                       JOIN cinemas ON cinemas.cinema_id = theaters.cinema_id
                       JOIN categorysall ON categorysall.categorysAll_id = screenings.categorysAll_id
                       JOIN categorys ON categorysall.category_id = categorys.category_id
                       JOIN movies ON movies.movie_id = categorysall.movie_id
                       JOIN users ON users.user_id = movie_ticket.user_id
                       WHERE movie_ticket.user_id = 1
                       order by movie_ticket.ticket_id desc;";
        $result = mysqli_query($this->link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function user_name_update($first, $last, $userName)
    {
        $result = mysqli_query($this->link, "UPDATE users SET firstName = '$first' , lastName = '$last' WHERE userName = '$userName'");
        return (!$result) ? 'false' : 'true';
    }
    public function user_email_update($email, $userName)
    {
        $result = mysqli_query($this->link, "UPDATE users SET email = '$email' WHERE userName = '$userName'");
        return (!$result) ? 'false' : 'true';
    }
    public function user_phone_update($phone, $userName)
    {
        $result = mysqli_query($this->link, "UPDATE users SET phone = '$phone' WHERE userName = '$userName'");
        return (!$result) ? 'false' : 'true';
    }
    public function user_userName_update($pass, $userName)
    {
        $result = mysqli_query($this->link, "UPDATE users SET userName = '$pass' WHERE userName = '$userName'");
        return (!$result) ? 'false' : 'true';
    }
    public function user_image_update($file, $userName)
    {
        $result = mysqli_query($this->link, sprintf("UPDATE users SET image = %s WHERE userName = '%s'", "'" . $file . "'", $userName));
        return (!$result) ? 'false' : 'true';
    }
    // public function movie_ticket(){
    //     $check = mysqli_query($this->link, "SELECT * FROM movie_ticket WHERE user_id = 1");
    //     $row = mysqli_fetch_assoc($check);
    //     return $row;
    // }
}
