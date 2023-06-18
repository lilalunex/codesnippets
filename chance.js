let run = true;
let runs = 0;
let max = 10000; // chance lower then 0,04
let min = 4;
let result;

while (run) {
  runs++;

  result = Math.floor(Math.random() * (max - min + 1)) + min;

  if (result <= 4) run = false;
}

console.log("done after: " + runs + " runs")