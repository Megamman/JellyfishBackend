<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_Model extends CI_Model {

    function get_reports($status = 1) {

        return $this->db->select('tbl_jellyfish_report.*,
                                  tbl_jellyfish_report_details.*,
                                  tbl_locations.l_name')
                        ->join('tbl_jellyfish_report_details', 'tbl_jellyfish_report.id = tbl_jellyfish_report_details.report_id', 'left')
                        ->join('tbl_locations', 'tbl_jellyfish_report.tbl_locations_id = tbl_locations.id')
                        ->where('tbl_jellyfish_report.r_status', $status)
    }
