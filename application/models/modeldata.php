<?php 
	/**
	 * 
	 */
	class modeldata extends CI_Model
	{
		public function ambilDataAsset()
		{
			return $this->db->get('tbl_asset')->result();
		}
		public function ambilDataInvestor()
		{
			return $this->db->get('tbl_investor')->result();
		}
		public function ambilDataUser()
		{
			return $this->db->get('tbl_user')->result();
		}
		public function simpan_asset($nama_barang,$jumlah,$kondisi,$keterangan)
		{
			$isi_data = array(
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kondisi' => $kondisi,
				'keterangan' => $keterangan, 
			);
			$this->db->insert('tbl_asset', $isi_data);
		}
		public function simpan_investor($nama,$alamat,$keterangan)
		{
			$isi_data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'keterangan' => $keterangan, 
			);
			$this->db->insert('tbl_investor', $isi_data);
		}
		public function simpan_user($nama,$username,$password)
		{
			$isi_data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password, 
			);
			$this->db->insert('tbl_user', $isi_data);
		}
		public function ambilIdDataAsset($id_asset)
		{
			$this->db->where('id_asset',$id_asset);
			return $this->db->get('tbl_asset')->result();
		}
		public function update_asset($id_asset,$nama_barang,$jumlah,$kondisi,$keterangan)
		{
			$editdata = array(
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kondisi' => $kondisi,
				'keterangan' => $keterangan,  
			);
			$this->db->set($editdata);
			$this->db->where('id_asset',$id_asset);
			$this->db->update('tbl_asset');
		}
		public function ambilIdDataInvestor($id_investor)
		{
			$this->db->where('id_investor',$id_investor);
			return $this->db->get('tbl_investor')->result();
		}
		public function update_investor($id_investor,$nama,$alamat,$keterangan)
		{
			$editdata = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'keterangan' => $keterangan,  
			);
			$this->db->set($editdata);
			$this->db->where('id_investor',$id_investor);
			$this->db->update('tbl_investor');
		}
		public function ambilIdDataUser($id_user)
		{
			$this->db->where('id_user',$id_user);
			return $this->db->get('tbl_user')->result();
		}
		public function update_user($id_user,$nama,$username,$password)
		{
			$editdata = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,  
			);
			$this->db->set($editdata);
			$this->db->where('id_user',$id_user);
			$this->db->update('tbl_user');
		}
		public function getIdAsset($id)
		{
			$this->db->where('id_asset',$id);
			return $this->db->get('tbl_asset');

		}
		public function hapusDataAsset()
		{
			$hapusData=$this->input->post('id_asset');
			$this->db->where('id_asset',$hapusData);
			$this->db->delete('tbl_asset');
		}
		public function getIdInvestor($id)
		{
			$this->db->where('id_investor',$id);
			return $this->db->get('tbl_investor');

		}
		public function hapusDataInvestor()
		{
			$hapusData=$this->input->post('id_investor');
			$this->db->where('id_investor',$hapusData);
			$this->db->delete('tbl_investor');
		}
		public function getIdUser($id)
		{
			$this->db->where('id_user',$id);
			return $this->db->get('tbl_user');

		}
		public function hapusDataUser()
		{
			$hapusData=$this->input->post('id_user');
			$this->db->where('id_user',$hapusData);
			$this->db->delete('tbl_user');
		}
	}
 ?>