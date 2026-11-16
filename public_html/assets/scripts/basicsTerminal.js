

// first get the elements we need
var screen = document.getElementById('screen');
var prompt = document.getElementById('prompt');
var box = document.getElementById('box');

// make the names of the folders Ill actually be using each one will
// be a list of the folders and pretend items inside it
var folders = {
  "/home": ["documents", "music"],
  "/home/documents": ["file.txt", "notes.docx", "2024_taxes"],
  "/home/music": ["song.mp3", "playlists"],
};
// easy value to store location
var where = "/home/documents";

// lesson steps (exactly the order to expect commands)
var steps = [
  { command: "pwd", hint: "the 'pwd' command prints your current directory"},
  { command: "cd ..", hint: "the 'cd' command changes your directory and '..' refers to the parent directory"},
  { command: "ls", hint: "the 'ls' command lists what is in this folder" },
  { command: "cd music", hint: "the 'cd' command changes your directory to the specified folder" },
  { command: "mkdir albums", hint: "the 'mkdir' command creates a new directory (you are creating the 'albums' directory)" },
  { command: "ls", hint: "type the 'ls' command to see your new folder!" }
];

var step = 0;

// functions to handle printing and prompting the user
function print(text) {

  screen.innerHTML += text + "<br>";
}

function promptUser() {
  prompt.innerHTML = where + " $ ";
}

function runCommand(command) {
  if (command === "pwd") {
    return where;
  }
  if (command === "ls") {
    return folders[where].join("\n");
  }
  if (command === "cd ..") {
    where = "/home";
    return "";
  }
  if (command == "cd music") {
    where = "/home/music";
    return "";
  }
  if (command == "mkdir albums") {
    if (!folders[where].includes("albums")) {
      folders[where].push("albums");
    }
    return "";
  }

  return "";
}

// handle form submission (presses enter)
document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();
  var typed = box.value.trim();
  box.value = '';

  print(where + " $ " + typed);
  // is this the command i want?


  if (typed === steps[step].command) {
    var output = runCommand(typed);
    if (output !== "") {
      print(output);
    }
    step++;
  } else {
    print("Incorrect command. Hint: " + steps[step].hint);
  }
  if (step >= steps.length) {
    print("Lesson complete!");
    box.disabled = true;
    prompt.innerHTML = "";
    box.style.display = "none";
  } else {
    promptUser();
  }
});

//start the actual thing
promptUser();
print("hint: " +steps[0].hint);


