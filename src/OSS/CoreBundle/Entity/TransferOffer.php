<?php

namespace OSS\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OSS\CoreBundle\Repository\TransferOfferRepository")
 */
class TransferOffer
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Player
     *
     * @ORM\ManyToOne(targetEntity="Player", fetch="EAGER")
     */
    private $player;

    /**
     * @var Team
     *
     * @ORM\ManyToOne(targetEntity="Team", fetch="EAGER")
     */
    private $originTeam;

    /**
     * @var Team
     *
     * @ORM\ManyToOne(targetEntity="Team", fetch="EAGER")
     */
    private $targetTeam;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Player $player
     */
    public function setPlayer(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return Team
     */
    public function getOriginTeam()
    {
        return $this->originTeam;
    }

    /**
     * @param Team $originTeam
     */
    public function setOriginTeam(Team $originTeam)
    {
        $this->originTeam = $originTeam;
    }

    /**
     * @return Team
     */
    public function getTargetTeam()
    {
        return $this->targetTeam;
    }

    /**
     * @param Team $targetTeam
     */
    public function setTargetTeam(Team $targetTeam)
    {
        $this->targetTeam = $targetTeam;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
