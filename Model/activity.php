<?php

class Activity
{
    private $id_activite;
    private $nomActivite;
    private $type;
    private $description;
    private $duree;
    private $id_evenement;
    private $difficulte;
    private $categorie;
    private $prix;

    public function getIdActivite(): int
    {
        return $this->id_activite;
    }

    public function setIdActivite(int $id_activite): void
    {
        $this->id_activite = $id_activite;
    }

    public function getNomActivite(): string
    {
        return $this->nomActivite;
    }

    public function setNomActivite(string $nomActivite): void
    {
        $this->nomActivite = $nomActivite;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): void
    {
        $this->duree = $duree;
    }

    public function getIdEvenement(): int
    {
        return $this->id_evenement;
    }

    public function setIdEvenement(int $id_evenement): void
    {
        $this->id_evenement = $id_evenement;
    }

    public function getDifficulte(): string
    {
        return $this->difficulte;
    }

    public function setDifficulte(string $difficulte): void
    {
        $this->difficulte = $difficulte;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }
}
?>
