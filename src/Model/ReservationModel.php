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
        $reservation = $reservation->getReservation();
        $created_at = $reservation->getCreated_at();
        $updated_at = $reservation->getUpdated_at();
        $stmt = "INSERT INTO reserver (nom, email, telephone, reservation, created_at, updated_at) VALUES ('$fullname', '$email', '$phone_number','$reservation', '$created_at', '$updated_at')";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute();
    }
}
