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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('User_Model');
		$this->load->helper(array( 'url'));
		// $this->load->library(array("form_validation"));
	}
	public function index()
	{
		$this->load->view('index.php');
	}
	public function addPartner()
	{
		$this->load->view('rkca-addPartner');
	}
	public function Business_Analyst()
	{
		$this->load->view('Business_Analyst');
	}
	public function Business_Analyst_copy()
	{
		$this->load->view('Business_Analyst copy');
	}
	public function Business_Restructuring()
	{
		$this->load->view('Business_Restructuring');
	}
	public function BusinessSupportandFinancialReporting()
	{
		$this->load->view('BusinessSupportandFinancialReporting');
	}
	public function careers()
	{
		$this->load->view('careers');
	}
	public function client_stories_old_copy()
	{
		$this->load->view('client_stories_old_copy');
	}
	public function client_stories()
	{
		$this->load->view('client_stories');
	}
	public function clientStoriesDetailPage1()
	{
		$this->load->view('clientStoriesDetailPage1');
	}
	public function clientStoriesDetailPage2()
	{
		$this->load->view('clientStoriesDetailPage2');
	}
	public function clientStoriesDetailPage3()
	{
		$this->load->view('clientStoriesDetailPage3');
	}
	public function clientStoriesDetailPage4()
	{
		$this->load->view('clientStoriesDetailPage4');
	}
	public function clientStoriesDetailPage5()
	{
		$this->load->view('clientStoriesDetailPage5');
	}
	public function clientStoriesDetailPage6()
	{
		$this->load->view('clientStoriesDetailPage6');
	}
	public function clientStoriesDetailPage7()
	{
		$this->load->view('clientStoriesDetailPage7');
	}
	public function clientStoriesDetailPage8()
	{
		$this->load->view('clientStoriesDetailPage8');
	}
	public function clientStoriesDetailPage9()
	{
		$this->load->view('clientStoriesDetailPage9');
	}
	public function clientStoriesDetailPage10()
	{
		$this->load->view('clientStoriesDetailPage10');
	}
	public function clientStoriesDetailPage11()
	{
		$this->load->view('clientStoriesDetailPage11');
	}
	public function clientStoriesDetailPage12()
	{
		$this->load->view('clientStoriesDetailPage12');
	}
	public function clientStoriesDetailPage13()
	{
		$this->load->view('clientStoriesDetailPage13');
	}
	public function clientStoriesDetailPage14()
	{
		$this->load->view('clientStoriesDetailPage14');
	}
	public function clientStoriesDetailPage15()
	{
		$this->load->view('clientStoriesDetailPage15');
	}
	public function CloseYourPublicLimitedCompany()
	{
		$this->load->view('Close_Your_Public_Limited_Company');
	}
	public function Closing_a_Nidhi_Company()
	{
		$this->load->view('Closing_a_Nidhi_Company');
	}
	public function Closing_a_One_Person_Company()
	{
		$this->load->view('Closing_a_One_Person_Company');
	}
	public function Closing_a_Partnership()
	{
		$this->load->view('Closing_a_Partnership');
	}
	public function Closing_a_Private_Limited_Company()
	{
		$this->load->view('Closing_a_Private_Limited_Company');
	}
	public function Closing_a_Proprietorship()
	{
		$this->load->view('Closing_a_Proprietorship');
	}
	public function collaborate_copy()
	{
		$this->load->view('Closing_a_Proprietorship');
	}
	public function collaborate()
	{
		$this->load->view('collaborate');
	}
	public function contact_us_copy()
	{
		$this->load->view('contact_us_copy');
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function Crossborderandmerchantbankingservices()
	{
		$this->load->view('Crossborderandmerchantbankingservices');
	}
	public function Digital_Signature_Registration()
	{
		$this->load->view('Digital_Signature_Registration');
	}
	public function Digital_transformation()
	{
		$this->load->view('Digital_transformation');
	}
	public function ecovis_india()
	{
		$this->load->view('ecovis_india');
	}
	public function ecovis_International()
	{
		$this->load->view('ecovis_International');
	}
	public function epf_registration()
	{
		$this->load->view('epf_registration');
	}
	public function ESI()
	{
		$this->load->view('ESI');
	}
	public function Financial_and_Capital_Services()
	{
		$this->load->view('Financial_and_Capital_Services');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
	public function geographical_locations()
	{
		$this->load->view('geographical_locations');
	}
	public function Government_risk_compliance()
	{
		$this->load->view('Government_risk_compliance');
	}
	public function GST()
	{
		$this->load->view('GST');
	}
	public function header()
	{
		$this->load->view('header');
	}
	public function job_discription()
	{
		$this->load->view('job_discription');
	}
	public function jobApplication()
	{
		$this->load->view('jobApplication');
	}
	public function jobs()
	{
		$this->load->view('jobs');
	}
	public function legalPage()
	{
		$this->load->view('legalPage');
	}
	public function Limited_Liability_Partnerships()
	{
		$this->load->view('Limited_Liability_Partnerships');
	}
	public function LitigationLegalServices()
	{
		$this->load->view('LitigationLegalServices');
	}
	public function Marketing_head()
	{
		$this->load->view('Marketing_head');
	}
	public function NewsLetter()
	{
		$this->load->view('NewsLetter');
	}
	public function NewsLetter1()
	{
		$this->load->view('NewsLetter1');
	}
	public function NGO_regestration()
	{
		$this->load->view('NGO_regestration');
	}
	public function Nidhi_Company()
	{
		$this->load->view('Nidhi_Company');
	}
	public function One_Person_Company()
	{
		$this->load->view('One_Person_Company');
	}
	public function Onshore_Offshore_Advisory()
	{
		$this->load->view('Onshore_Offshore_Advisory');
	}
	public function ourSolution()
	{
		$this->load->view('ourSolution');
	}
	public function PAN()
	{
		$this->load->view('PAN');
	}
	public function Partnership()
	{
		$this->load->view('Partnership');
	}
	public function Private_Limited_Company()
	{
		$this->load->view('Private_Limited_Company');
	}
	public function Professional_Tax_Registration()
	{
		$this->load->view('Professional_Tax_Registration');
	}
	public function Proprietorship()
	{
		$this->load->view('Proprietorship');
	}
	public function renduring()
	{
		$this->load->view('renduring');
	}
	public function Society_Registration()
	{
		$this->load->view('Society_Registration');
	}
	public function strategic_choices()
	{
		$this->load->view('strategic_choices');
	}
	public function Strategy_Performance_Consulting_services()
	{
		$this->load->view('Strategy_Performance_Consulting_services');
	}
	public function Succession_Planning()
	{
		$this->load->view('Succession_Planning');
	}
	public function TAN()
	{
		$this->load->view('TAN');
	}
	public function team_copy()
	{
		$this->load->view('team_copy');
	}
	public function team()
	{
		$this->load->view('team');
	}
	public function TeamAboutMe()
	{
		$this->load->view('TeamAboutMe');
	}


}