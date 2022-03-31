import random, os, time

########################
### GLOBAL VARIABLES ###
########################
hp = 250
pp = 40
potioncount = 3
elixircount = 2
opp_hp = 250
opp_potioncount = 2


########################
####### FUNCTIONS ######
########################

def user_move(name,dmg,acc,pp_req):
	global hp,pp,opp_hp
	miss = random.randrange(1,101)
	os.system('cls')
	time.sleep(1)
	print("Salamence used",name)
	time.sleep(1)
	pp = pp - pp_req
	if miss < acc:
		opp_hp = opp_hp - dmg
		if opp_hp < 0:
			opp_hp = opp_hp - opp_hp
		print("Foe Metagross's HP fell to",opp_hp)
	else:
		print("But it missed!")
	return

def opp_move(name,dmg,acc):
	global hp
	opp_miss = random.randrange(1,101)
	time.sleep(1)
	print("Foe Metagross used",name)
	time.sleep(1)
	if opp_miss < acc:
		hp = hp - dmg
		if hp < 0:
			hp = hp - hp
		os.system("color 4f")
		print("Salamence's HP fell to",hp)
		time.sleep(0.3)
		os.system("color 07")
	else:
		print("But it missed!")
	return


########################
##### MAIN PROGRAM #####
########################
os.system('cls')
time.sleep(1)
print("Steven: Welcome, trainer. I have been waiting for you...",end="")
input("")
print("Steven: I was looking forward to seeing you here one day...",end="")
input("")
print("Steven: You... What did you see on your journey with Pokemon?",end="")
input("")
print("Steven: What did you feel, meeting so many trainers like you?",end="")
input("")
print("Steven: What has awoken in you?",end="")
input("")
print("Steven: I want you to hit me with it all! Now, bring it!",end="")
input("")
os.system('cls')
print("Champion Steven would like to battle.")
time.sleep(1)
print("Champion Steven sent out Metagross.")
time.sleep(1)
print("You: Go, Salamence!")
while hp > 0 and opp_hp > 0:
	time.sleep(1)
	print("\n")
	print("========================")
	print("Your HP:",hp)
	print("Your PP:",pp)
	print("Foe's HP:",opp_hp)
	print("========================")
	print("\n")
	time.sleep(1)
	print("========================")
	print("=== Available moves ====")
	print("========================")
	print("=== [1] Flamethrower ===")
	print("=== [2] Crunch       ===")
	print("=== [3] Dragon Claw  ===")
	print("========================")
	if potioncount > 0 or elixircount > 0:
		print("========  Bag   ========")
		print("========================")
		if potioncount > 0:
			print("=== [H] Hyper Potion ===")
		if elixircount > 0:
			print("=== [M] Max Elixir   ===")
		print("========================")
	print("\n")
	chosen = 0
	while chosen == 0:
		move = input("Choose your move [1/2/3] or Bag [H/M]: ")
		if move == "1":
			if pp >= 3:
				chosen = 1
				user_move("Flamethrower",40,80,3)
			else:
				print("Not enough PP!")
		elif move == "2":
			if pp >= 2:
				chosen = 1
				user_move("Crunch",30,95,2)
			else:
				print("Not enough PP!")
		elif move == "3":
			if pp >= 3:
				chosen = 1
				user_move("Dragon Claw",45,70,3)
			else:
				print("Not enough PP!")
		elif move == "666":
			os.system('cls')
			time.sleep(1)
			chosen = 1
			print("You: Huehuehue.")
			time.sleep(1)
			print("Steven: Wtf!?")
			time.sleep(1)
			print("You: Let me show you my trump card.")
			time.sleep(1)
			print("You: That's enough Salamence! Come back!")
			time.sleep(2)
			print("You: Go, Goku!")
			time.sleep(2)
			print("Goku: AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHHH!")
			time.sleep(1)
			print("Goku transformed into a Super Saiyan.")
			time.sleep(1)
			print("Goku used Yell")
			time.sleep(1)
			print("Foe Metagross's HP fell to 0")
			opp_hp = 0
			time.sleep(1)
		elif move == "H":
			if potioncount > 0:
				potioncount -= 1
				hp = hp + 200
				if hp > 250:
					hp = 250
				print("You used a Hyper Potion.")
				time.sleep(1)
				print("Salamence's HP has been restored to",hp)
				time.sleep(1)
			else:
				print("You're out of potions!")
		elif move == "M":
			if elixircount > 0:
				elixircount -= 1
				pp = 40
				print("You used a Max Elixir.")
				time.sleep(1)
				print("Salamence's PP has been restored to",pp)
				time.sleep(1)
			else:
				print("You're out of elixirs!")
		else:
			print("Invalid move!")
	print("\n")
	if opp_hp < 40 and opp_hp > 0 and opp_potioncount > 0:
		opp_potioncount -= 1
		time.sleep(3)
		opp_hp = opp_hp + 200
		print("Champion Steven's Hyper Potion restored Metagross's HP.")
		time.sleep(1)

	if opp_hp > 0:
		opp_move_rand = random.randrange(1,101)
		if opp_move_rand < 40:
			opp_move("Earthquake",25,80)
		elif opp_move_rand < 80: 
			opp_move("Meteor Mash",35,90)
		else:
			opp_move("Hyper Beam", 60, 70)
	else:
		time.sleep(1)
		print("Metagross fainted.")
if hp > 0:
	os.system('cls')
	time.sleep(1)
	print("You win!")
	time.sleep(1)
	print("Steven: I, the Champion, fall in defeat. Kudos to you!")
	time.sleep(1)
	print("Steven: You are a truly noble Pokemon Trainer!")
	input("")
else:
	time.sleep(1)
	print("You whited out.")


########################
########  END  ######### 
########################
