<?php
namespace InsaLan\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use InsaLan\TournamentBundle\Entity\Player;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $credit = 0;

    /**
     * @ORM\Column(name="table_id", type="integer", nullable=true)
     */
    protected $table;

    /**
     * @ORM\OneToOne(targetEntity="InsaLan\TournamentBundle\Entity\Player", inversedBy="user", cascade={"all"},  orphanRemoval=true)
     */
    protected $player;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return User
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set table
     *
     * @param integer $table
     * @return User
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get table
     *
     * @return integer
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Get Player
     *
     * @return Player
     */
    public function getPlayer() {
      return $this->player;
    }

    /**
     * Set Player
     *
     * @param InsaLan\TournamentBundle\Entity\Player
     * @return this
     */
    public function setPlayer(Player $p)
    {
        $this->player = $p;

        return $this;
    }

    public function removePlayer()
    {
        $this->player = null;

        return $this;
    }

}
