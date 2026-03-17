<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $date_reservation = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $users = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?Room $rooms = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTime
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTime $date_reservation): static
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): static
    {
        $this->users = $users;

        return $this;
    }

    public function getRooms(): ?Room
    {
        return $this->rooms;
    }

    public function setRooms(?Room $rooms): static
    {
        $this->rooms = $rooms;

        return $this;
    }
}
