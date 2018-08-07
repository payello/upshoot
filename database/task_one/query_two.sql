select o.name as Owner, m.brand as Brand, m.colour as Colour, m.model_year as ModelYear
from motorbikes m
left join owners o
on m.id = motorbike_id