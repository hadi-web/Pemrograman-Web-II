<?php 
class Model_siswa extends CI_Model
{
	public $_table = "tbl_siswa";

    public $id;
    public $nama_siswa;
    public $kelas;
    public $foto = "asset/img/logo1.jpg";
    public $alamat;
    public $th_masuk;
	
	public function rules()
	{
		return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'numeric'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
        ];
	}
	public function tampil()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama_siswa"];
        $this->kelas = $post["kelas"];
        $this->alamat = $post["alamat"];
        $this->th_masuk = $post["th_masuk"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama_siswa"];
        $this->kelas = $post["kelas"];
        $this->alamat = $post["alamat"];
        $this->th_masuk = $post["th_masuk"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}

?>