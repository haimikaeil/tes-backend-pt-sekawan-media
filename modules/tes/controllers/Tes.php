<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends ADMIN_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->cname 	= 'tes';
		$this->table 	= 'user';
		$this->url 		= 'http://static.sekawanmedia.co.id/data.json';
    }

  	public function index()
 	{

		$this->templates->display($this->cname.'/index', @$data);
  	}

  	public function get_data()
  	{	

  		if (!function_exists('curl_version')) {
			echo "Curl belum aktif di server!";
			exit;
		}

  		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($ch);
		$result = json_decode($result, TRUE);

		if($result['status'] == 'success'){

			$data = $result['data'];

			$sort = array();
			foreach($data as $k => $v) {
			   $sort['umur'][$k] = $v['employee_age'];
			   $sort['gaji'][$k] = $v['employee_salary'];
			}

			array_multisort($sort['umur'], SORT_ASC, $sort['gaji'], SORT_DESC, $data);


			echo json_encode(array('status' => 'sukses', 'data' => $data));

		}else{
			echo json_encode(array('status' => 'gagal'));
		}
  	}

 	public function do_tambah()
 	{
 		if (!function_exists('curl_version')) {
			echo "Curl belum aktif di server!";
			exit;
		}

  		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($ch);
		$result = json_decode($result);

		if($result->status == 'success'){

			$data = $result->data;

			foreach ($data as $key => $v) {

				$this->db->where('id', $v->id);
				$cek_data = $this->db->get($this->table, 1)->row();

				if(empty($cek_data)){
					$proses = $this->db->insert($this->table, $v);
				}else{

					$this->db->where('id', $v->id);
					$proses = $this->db->update($this->table, $v);
				}
			}

			if($proses){
				echo 'sukses';
			}else{
				echo 'gagal';
			}
			
		}else{
			echo 'gagal';
		}

 	}

}
