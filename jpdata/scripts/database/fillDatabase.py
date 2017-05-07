import MySQLdb
import os

dbconfig = {"host": "localhost", "username" : "root", "password": "", "database": "eedu"}
# Directory with the Scripts
db_seed_directory = "../../db_seed/"

db = MySQLdb.connect(dbconfig["host"], dbconfig["username"], dbconfig["password"], dbconfig["database"])
cursor = db.cursor()

def executeScriptsFromFile(filename):
	"""
		Executes the scripts contained in a file
		@param filename -> name of the file to run
	"""
	# read file like a single buffer
	fd = open(filename, 'r')
	sqlFile = fd.read()
	fd.close()
	# get command from file
	sqlCommands = sqlFile.split(';')
	# run each command in the file
	for command in sqlCommands:
		try:
			cursor.execute(command)
			db.commit()
		except Exception, e:
			print e
	print "Se ha finalizado de correr los queries en el archivo %s" % filename

# Opening each file and running its scripts
sqlfiles = os.listdir(db_seed_directory)
for sqlfile in sqlfiles:
	executeScriptsFromFile(db_seed_directory + sqlfile)

print "Se ha Finalizado con exito el fill de la base de datos"
	