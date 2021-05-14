<?php


class CampaignModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $sth = $this->db->prepare("
            SELECT 
                campaigns.id, campaigns.campaign_name, SUM(orders.order_value) AS total 
            FROM campaigns 
            LEFT JOIN orders ON orders.campaign_id = campaigns.id
            WHERE start_date > :startDate 
                AND  end_date < :endDate
                AND campaign_type = 'SALES'
                GROUP BY campaigns.id");
        $sth->execute([
            ':startDate' => Session::get('startDate'),
            ':endDate' => Session::get('endDate'),
        ]);
        return $sth->fetchAll();
    }

}