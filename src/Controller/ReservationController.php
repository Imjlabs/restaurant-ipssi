<?php

namespace App\Controller;

use App\Entity\Reservation;
use Core\Controller\DefaultController;
use App\Model\ReservationModel;

class ReservationController extends DefaultController
{

    public function index()
    {
        $this->render(
            "reservation/index",
            null,
            "Réservation",
            []
        );
    }

    public function add($fullname, $email, $phone_number, $reserver)
    {
        $reservation = new Reservation;
        $reservation->setFullName($fullname);
        $reservation->setEmail($email);
        $reservation->setPhoneNumber($phone_number);
        $reservation->setReservation($reserver);
        $this->model->save($reservation);
    }

    public function booking()
    {
        if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['date']) && isset($_GET['phone'])) {
            $fullname = $_GET['name'];
            $email = $_GET['email'];
            $reserver = $_GET['date'];
            $phone_number = $_GET['phone'];
        } else {
            throw new \UnexpectedValueException("Les champs ne sont pas tous bien remplis");
        }

        $status = "erreur";

        try {
            $this->add($fullname, $email, $reserver, $phone_number);
            $status = "valide";
        } catch (\Throwable $th) {
            $response = [
                "status" => $status
            ];
            echo $th;
        }
        var_dump($_GET);
    }
}
