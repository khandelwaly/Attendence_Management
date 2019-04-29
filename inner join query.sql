select distinct Physics_CS1.roll_no, CS1.name 
from Physics_CS1 
inner join CS1 on Physics_CS1.roll_no=CS1.roll_no;