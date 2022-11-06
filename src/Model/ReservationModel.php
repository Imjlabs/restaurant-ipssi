<?php

namespace App\Model;

use App\Entity\Reservation;
use Core\Model\DefaultModel;

class ReservationModel extends DefaultModel
{
    protected string $table = 'reserver';
    protected string $entity = 'Reservation';

    public function save(Reservation $reservation)
    {
        $fullname = $reservation->getFullName();
        $email = $reservation->getEmail();
        $phone_number = $reservation->getPhoneNumber();
        $reserver = $reservation->getReservation();
        $stmt = "INSERT INTO reserver (nom, email, telephone, reservation) VALUES ('$fullname', '$email', '$phone_number','$reserver')";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute();
    }
}
