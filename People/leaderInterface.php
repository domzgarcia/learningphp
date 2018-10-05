<?php 
namespace Bluff\Directory\People;
use Bluff\Directory\People\TeacherInterface;

interface LeaderInterface extends TeacherInterface {
	public function enroll();
	public function getType();
	public function command();
}