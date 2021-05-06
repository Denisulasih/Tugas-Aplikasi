<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function beranda()
	{
		$this->load->view('beranda');
	}
	public function login()
	{
	    $username=$this->input->post('username');
	    $password=$this->input->post('password');
	    $this->db->where('username',$username);
	    $this->db->where('password',$password);
	    $LoginSukses = $this->db->get('tbl_user')->row_array();
	    if ($LoginSukses > 0) {
	    	redirect('Welcome/beranda');
	    }else{
	    	redirect('Welcome/');
	    }
	}
	public function asset()
	{
		$this->load->model('modeldata');
		$data['data_asset'] = $this->modeldata->ambilDataAsset();
		$this->load->view('beranda', $data);
	}
	public function investor()
	{
		$this->load->model('modeldata');
		$data['data_investor'] = $this->modeldata->ambilDataInvestor();
		$this->load->view('beranda', $data);
	}
	public function user()
	{
		$this->load->model('modeldata');
		$data['data_user'] = $this->modeldata->ambilDataUser();
		$this->load->view('beranda', $data);
		
	}
	public function tambahDataAsset()
	{
		$this->load->view('beranda');
	}
	public function simpan_asset()
	{
		$this->load->model('modeldata');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah=$this->input->post('jumlah');
		$kondisi=$this->input->post('kondisi');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->simpan_asset($nama_barang,$jumlah,$kondisi,$keterangan);
		redirect('Welcome/asset');

	}
	public function tambahDataInvestor()
	{
		$this->load->view('beranda');
	}
	public function simpan_investor()
	{
		$this->load->model('modeldata');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->simpan_investor($nama,$alamat,$keterangan);
		redirect('Welcome/investor');

	}
	public function tambahDataUser()
	{
		$this->load->view('beranda');
	}
	public function simpan_user()
	{
		$this->load->model('modeldata');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->modeldata->simpan_user($nama,$username,$password);
		redirect('Welcome/user');

	}
	public function EditDataAsset($id_asset=null)
	{
		$this->load->model('modeldata');
		$data['ambilIdDataAsset']=$this->modeldata->ambilIdDataAsset($id_asset);
		$this->load->view('beranda',$data);
	}
	public function update_asset()
	{
		$this->load->model('modeldata');
		$id_asset=$this->input->post('id_asset');
		$nama_barang=$this->input->post('nama_barang');
		$jumlah=$this->input->post('jumlah');
		$kondisi=$this->input->post('kondisi');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->update_asset($id_asset,$nama_barang,$jumlah,$kondisi,$keterangan);
		redirect('Welcome/asset');

	}
	public function EditDataInvestor($id_investor=null)
	{
		$this->load->model('modeldata');
		$data['ambilIdDataInvestor']=$this->modeldata->ambilIdDataInvestor($id_investor);
		$this->load->view('beranda',$data);
	}
	public function update_investor()
	{
		$this->load->model('modeldata');
		$id_investor=$this->input->post('id_investor');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$keterangan=$this->input->post('keterangan');
		$this->modeldata->update_investor($id_investor,$nama,$alamat,$keterangan);
		redirect('Welcome/investor');

	}
	public function EditDataUser($id_user=null)
	{
		$this->load->model('modeldata');
		$data['ambilIdDataUser']=$this->modeldata->ambilIdDataUser($id_user);
		$this->load->view('beranda',$data);
	}
	public function update_user()
	{
		$this->load->model('modeldata');
		$id_user=$this->input->post('id_user');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->modeldata->update_user($id_user,$nama,$username,$password);
		redirect('Welcome/user');

	}
	public function getIdAsset($id)
	{
		$this->load->model('modeldata');
		$data=$this->modeldata->getIdAsset($id)->row();
		echo json_encode($data);
	}
	public function hapusDataAsset()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataAsset();
		redirect('Welcome/asset');

	}
	public function getIdInvestor($id)
	{
		$this->load->model('modeldata');
		$data=$this->modeldata->getIdInvestor($id)->row();
		echo json_encode($data);
	}
	public function hapusDataInvestor()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataInvestor();
		redirect('Welcome/investor');
		
	}
	public function getIdUser($id)
	{
		$this->load->model('modeldata');
		$data=$this->modeldata->getIdUser($id)->row();
		echo json_encode($data);
	}
	public function hapusDataUser()
	{
		$this->load->model('modeldata');
		$this->modeldata->hapusDataUser();
		redirect('Welcome/user');
		
	}
}
