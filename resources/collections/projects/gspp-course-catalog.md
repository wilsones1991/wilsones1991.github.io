---
title: "GSPP Course Catalog"
image: "gspp-courses.png"
technologies: ["PHP", "JavaScript", "SQL", "ExpressionEngine"]
---

Every semester, GSPP program managers have to schedule hundreds of class sections with many moving parts. Prior to this project, they also had to maintain a manual Google Doc that listed all GSPP courses, organized by level and degree program.

I designed and implemented an ExpressionEngine addon that calls multiple Berkeley SIS API endpoints to automatically discover GSPP classes and render them into an online course catalog. This script runs on a nightly basis via a server cron job, ensuring classes stay up to date. Now, course schedulers only have to update one system with the class schedule, and students have a more accessible source to discover GSPP courses.