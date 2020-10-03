<?php


class Property
{
    private $id = 0;
    private $name = "";
    private $bus_stop = "";
    private $address = "";
    private $town = "";
    private $date_added = "";
    private $type = "";
    private $agent = "";

    /**
     * Property constructor.
     * @param int $id
     * @param string $name
     * @param string $bus_stop
     * @param string $address
     * @param string $town
     * @param string $date_added
     * @param string $type
     * @param string $agent
     */
    public function __construct(int $id, string $name, string $bus_stop, string $address, string $town, string $date_added, string $type, string $agent)
    {
        $this->id = $id;
        $this->name = $name;
        $this->bus_stop = $bus_stop;
        $this->address = $address;
        $this->town = $town;
        $this->date_added = $date_added;
        $this->type = $type;
        $this->agent = $agent;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBusStop(): string
    {
        return $this->bus_stop;
    }

    /**
     * @param string $bus_stop
     */
    public function setBusStop(string $bus_stop): void
    {
        $this->bus_stop = $bus_stop;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getDateAdded(): string
    {
        return $this->date_added;
    }

    /**
     * @param string $date_added
     */
    public function setDateAdded(string $date_added): void
    {
        $this->date_added = $date_added;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAgent(): string
    {
        return $this->agent;
    }

    /**
     * @param string $agent
     */
    public function setAgent(string $agent): void
    {
        $this->agent = $agent;
    }


}