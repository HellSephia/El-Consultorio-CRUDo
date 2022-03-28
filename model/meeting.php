<?php
class Meeting
{
	private $pdo;
    
    public $id;
    public $first_name;
    public $last_name;
	public $email;
    public $phone_number;
    public $topic;
    public $date;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM meeting");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function DeleteMeeting()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM deletemeeting");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM meeting WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM meeting WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE meeting SET 
						first_name          = ?, 
						last_name        = ?,
                        email        = ?,
						phone_number            = ?, 
						topic = ?,
						date = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->first_name, 
                        $data->last_name,
                        $data->email,
                        $data->phone_number,
                        $data->topic,
                        $data->date,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Meeting $data)
	{
		try 
		{
			/* INSERT INTO `meeting` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `topic`, `descripcion`, `date`) VALUES (NULL, 'Meg', 'Flechew ween', 'flennwe@email.com', '23466543334', 'Urgent reunion', 'This meeting will recoverd all about the partership between this two big companies', '2022-03-30 15:06:17.000000'); */
		$sql = "INSERT INTO meeting (first_name,last_name,email,phone_number,topic,date) 
		        VALUES (?, ?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->first_name, 
					$data->last_name,
					$data->email,
					$data->phone_number,
					$data->topic,
					$data->date
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}