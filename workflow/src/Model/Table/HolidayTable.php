namespace App\Model\Table;

use Cake\ORM\Table;

class HolidayTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('holiday');
    }
}
