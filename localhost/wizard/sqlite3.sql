-- Adminer 4.2.4 SQLite 3 dump

DROP TABLE IF EXISTS "logs";
CREATE TABLE "logs" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "ctime" text,
  "whom" text,
  "ip" text,
  "ua" text
);

--
