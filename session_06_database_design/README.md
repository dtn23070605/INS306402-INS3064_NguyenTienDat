# Ly thuyet session 6

## Part 1: Normalization

| Table | Primary Key | Foreign Key(s) | Non-key columns |
|------|-------------|---------------|----------------|
| Students | StudentID | None | StudentName |
| Courses | CourseID | ProfessorID | CourseName |
| Professors | ProfessorID | None | ProfessorName, ProfessorEmail |
| Enrollments | EnrollmentID | StudentID, CourseID | Grade |

## Part 2: Relationships

### Relationship Drills

- **Author → Book:** One-to-Many (1:N)  
  One author can write many books, but each book has one author.  
  **Foreign Key:** `author_id` in the **Books** table.

- **Citizen → Passport:** One-to-One (1:1)  
  Each citizen has one passport, and each passport belongs to one citizen.  
  **Foreign Key:** `citizen_id` in the **Passports** table.

- **Customer → Order:** One-to-Many (1:N)  
  A customer can place many orders, but each order belongs to one customer.  
  **Foreign Key:** `customer_id` in the **Orders** table.

- **Student ↔ Class:** Many-to-Many (M:N)  
  A student can take many classes, and a class can have many students.  
  This relationship requires a junction table.  
  **Junction Table:** `Enrollments` with `student_id` and `class_id`.

- **Team → Player:** One-to-Many (1:N)  
  One team has many players, but each player belongs to one team.  
  **Foreign Key:** `team_id` in the **Players** table.
