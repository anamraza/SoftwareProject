DROP TABLE IF EXISTS studentStats;
CREATE TABLE studentStats (
        term TEXT,
        deptCode TEXT,
	pgmCode TEXT,
	pgmName TEXT,
	vsnDate TEXT,
	studentNumber INT,
        studentName TEXT,
        idxCol INT,
        lastName TEXT,
        firstName TEXT,
        aLevel TEXT,
        courseNumber TEXT,
        courseName TEXT,
        sectNumber INT,
        status INT,
        grade TEXT
	PRIMARY KEY( id )
);