---
title: "Electives Database Modernization"
image: "electives-database.png"
technologies: ["PHP", "JavaScript", "SQL", "ExpressionEngine"]
---

GSPP has long maintained a web application where current students can write reviews of their elective courses. Newly admitted and current students can then browse these reviews to help them determine which electives to enroll in.

The 10-year-old system recently required a major overhaul in order to continue allowing students to submit reviews. Improvements include:

- Automatically discovering and populating all elective courses with GSPP students via the SIS API
- Creating GSPP Auth and ExpressionEngine accounts for new students
- Implementing modern models with custom encrypted data types to keep student enrollment data secure
- Reducing load time from 30 seconds to less than 3 seconds.