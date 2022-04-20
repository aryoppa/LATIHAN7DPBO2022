<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function addData($tname, $tdetails, $tsubject, $tpriority, $tdeadline)
	{

		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td)
		VALUES ('$tname', '$tdetails', '$tsubject', '$tpriority', '$tdeadline', 'Belum')";

		return $this->execute($query);
	}

	function deleteData($id)
	{
		$query = "DELETE FROM tb_to_do WHERE id = $id";

		return $this->execute($query);
	}

	function finishData($id)
	{
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = $id";

		return $this->execute($query);
	}

	function sortSubjectData()
	{
		$query = "SELECT * FROM tb_to_do ORDER BY subject_td ASC";

		return $this->execute($query);
	}

	function sortPriorityData()
	{
		$query = "SELECT * FROM tb_to_do ORDER BY priority_td ASC";

		return $this->execute($query);
	}

	function sortDeadlineData()
	{
		$query = "SELECT * FROM tb_to_do ORDER BY deadline_td ASC";

		return $this->execute($query);
	}

	function sortStatusData()
	{
		$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";

		return $this->execute($query);
	}
	
	
}

?>