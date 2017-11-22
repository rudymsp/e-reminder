<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Reminder extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_data','M_data');
			$this->load->library('email');
		}

		public function index()
		{
			$data['title']='Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='menu/content/reminder_dashboard';
			$this->load->view('menu/layout/wrapper',$data);
		}

		public function create()
		{
			$data['title']='Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='menu/content/reminder_create';
			$data['jenis'] = $this->M_data->tampil_jenis_reminder()->result();
			$data['dept'] = $this->M_data->tampil_dept()->result();
			$this->load->view('menu/layout/wrapper',$data);
		}

		public function create_jenis()
		{
			$data['title']='Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='menu/content/jenis_create';
			$this->load->view('menu/layout/wrapper',$data);
		}

		 public function cetak()
		{
			$data['title']='Reminder Jatuh Tempo - Halaman Utama';
			$data['menu']='dash_reminder';
			$data['content']='menu/content/reminder_cetak';
			$table='schedule';
			$data['dept'] = $this->M_data->tampil_dept()->result();
			$data['reminder'] = $this->M_data->tampil_data_reminder()->result();
			$this->load->view('menu/layout/wrapper',$data);
		}

		public function cetak_aksi($id)
		{
		   // $id=$this->input->post("id");
			$data['isinya']=$id;
		   $data['title']='Reminder Jatuh Tempo - Halaman Utama';
		   $data['menu']='dash_reminder';
		   $data['content']='menu/content/cetak_reminder';
		   $data['reminder']= $this->M_data->tampil_data2_reminder($id)->result();
           $this->load->view('menu/layout/wrapper',$data);
		}

		public function cetak_tertentu()
		{
		   $tgl1=$this->input->post("tanggal");
		   $tgl2=$this->input->post("tanggal2");
		   $dept=$this->input->post("dept");
		   $data['title']='Reminder Jatuh Tempo - Halaman Utama';
		   $data['menu']='dash_reminder';
		   $data['content']='menu/content/cetak_reminder_tanggal';
		   if ($dept==0){
		      $data['reminder']= $this->M_data->tampil_data3_reminder($tgl1,$tgl2)->result();
		   }else{
		      $data['reminder']= $this->M_data->tampil_data4_reminder($tgl1,$tgl2,$dept)->result();
		   }
           $this->load->view('menu/layout/wrapper',$data);
		}
	}
?>