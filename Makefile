install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-gcd:
	./bin/brain-gcd

brain-calc:
	./bin/brain-calc

brain-progression:
	./bin/brain-progression
