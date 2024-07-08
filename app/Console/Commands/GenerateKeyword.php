<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateKeyword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-keyword';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $word = $this->ask('What is your words (seperate with comma ?');
        $words = explode(',',$word);

            $sentences = $this->generateSentences($words);
            $uniqueSentences = $this->removeDuplicateSentences($sentences);

            echo "Generated Sentences:  \n";
            foreach ($uniqueSentences as $sentence) {
                echo $sentence."\n";
            }

    }

// Fungsi untuk menghasilkan semua kombinasi kalimat
public function generateSentences($words, $currentSentence = '', $results = []) {
    if (empty($words)) {
        $results[] = trim($currentSentence);
        return $results;
    }

    foreach ($words as $index => $word) {
        $remainingWords = $words;
        unset($remainingWords[$index]);
        $results = $this->generateSentences($remainingWords, $currentSentence . ' ' . $word, $results);
    }

    return $results;
}

// Fungsi untuk menghapus duplikasi kalimat
public function removeDuplicateSentences($sentences) {
    return array_unique($sentences);
}
}
