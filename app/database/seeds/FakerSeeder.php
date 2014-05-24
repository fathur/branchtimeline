<?php
class FakerSeeder extends Seeder {
	
	private $topikId	= array();
	private $rantingId	= array();
	private $artikelId	= array();
	
	public function run() {
		
		$faker = Faker\Factory::create();
		
		for ($i=1;$i<=5;$i++) {
			Topik::create(array(
				'judul' 		=> $faker->sentence,
				'deskripsi' 	=> $faker->paragraph
			));
		}

		$this->command->info('Tabel topik sudah di seeding data palsu sebanyak 5 record');
		
		foreach (Topik::all() as $tpk) {
			array_push($this->topikId, $tpk->id);

		}
		
		for ($i=1;$i<=50;$i++) {
			Ranting::create(array(
				'topik_id'	=> $faker->randomElement($this->topikId),
				'nama'		=> $faker->word,
				'deskripsi'	=> $faker->paragraph()
			));
		}
		
		$this->command->info('Tabel ranting sudah di seeding data palsu sebanyak 50 record');
		
		for ($i=1;$i<=300;$i++) {
			Artikel::create(array(
				'topik_id'	=> $faker->randomElement($this->topikId),
				'judul'		=> $faker->sentence(),
				'isi'		=> $faker->text(),
				'tanggal_peristiwa'	=> $faker->dateTime->format('Y-m-d H:i:s'),
				'status'	=> $faker->randomElement(array(
					'revisi','draft','publish'
				))				
			));
		}
		
		$this->command->info('Tabel artikel sudah di seeding data palsu sebanyak 300 record');
		
		foreach (Ranting::all() as $ranting) {
			array_push($this->rantingId, $ranting->id);
		
		}
		
		foreach (Artikel::all() as $artikel) {
			ArtikelRanting::create(array(
				'ranting_id'	=> $faker->randomElement($this->rantingId),
				'artikel_id'	=> $artikel->id
			));
		}
		
		$this->command->info('Tabel artikel_ranting sudah di seeding data palsu');
		
		foreach (Artikel::all() as $artikel) {
			array_push($this->artikelId, $artikel->id);
		}
		
		for ($i=1;$i<=300;$i++) {
			Pustaka::create(array(
				'artikel_id'		=> $faker->randomElement($this->artikelId),
				'sumber'			=> $faker->url,
				'tanggal_kutip'		=> $faker->dateTimeThisDecade->format('Y-m-d')
			));
		}
		
		$this->command->info('Tabel pustaka sudah di seeding data palsu');
		
	}
}