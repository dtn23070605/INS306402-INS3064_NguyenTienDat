# Database Normalization Assignment

## Part 1: Normalization

| Table | Primary Key | Foreign Key | Normal Form | Description |
|------|-------------|-------------|-------------|-------------|
| Students | StudentID | None | 3NF | Stores student information |
| Professors | ProfessorID | None | 3NF | Stores professor name and email |
| Courses | CourseID | ProfessorID | 3NF | Stores course information and which professor teaches it |
| Enrollments | (StudentID, CourseID) | StudentID, CourseID | 3NF | Stores which student takes which course and their grade |