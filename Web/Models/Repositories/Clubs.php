<?php declare(strict_types=1);
namespace openvk\Web\Models\Repositories;
use openvk\Web\Models\Entities\Club;
use Nette\Database\Table\ActiveRow;
use Chandler\Database\DatabaseConnection;

class Clubs
{
    private $context;
    private $clubs;
    
    function __construct()
    {
        $this->context = DatabaseConnection::i()->getContext();
        $this->clubs   = $this->context->table("groups");
    }
    
    private function toClub(?ActiveRow $ar): ?Club
    {
        return is_null($ar) ? NULL : new Club($ar);
    }
    
    function getByShortURL(string $url): ?Club
    {
        return $this->toClub($this->clubs->where("shortcode", $url)->fetch());
    }
    
    function get(int $id): ?Club
    {
        return $this->toClub($this->clubs->get($id));
    }
    
    function find(string $query, int $page = 1, ?int $perPage = NULL): \Traversable
    {
        $query   = '%'.$query.'%';
        $perPage = $perPage ?? OPENVK_DEFAULT_PER_PAGE;
        foreach($this->clubs->where("name LIKE ? OR about LIKE ?", $query, $query)->page($page, $perPage) as $result)
            yield new Club($result);
    }
    
    function getFoundCount(string $query): int
    {
        $query = '%'.$query.'%';
        return sizeof($this->clubs->where("name LIKE ? OR about LIKE ?", $query, $query));
    }
    
    use \Nette\SmartObject;
}
