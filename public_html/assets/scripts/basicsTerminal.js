

// first get the elements we need
var screen = document.getElementsByClassName('screen');
var prompt = document.getElementsByClassName('prompt');
var box = document.getElementsByClassName('entry');

// make the names of the folders Ill actually be using each one will
// be a list of the folders and pretend items inside it
var folders = {
  "/home": ["documents", "music"],
  "/home/documents": ["file.txt", "notes.docx", "2024_taxes"],
  "/home/music": ["song.mp3", "playlists"],
};
// Wherever you want the user to be goes here
var where = "/home/documents";

// Choose the commands you want the user to do, in order, along with the hints here
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

  screen[0].innerHTML += text + "<br>";
}

function promptUser() {
  prompt[0].innerHTML = where + " $ ";
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
  var typed = box[0].value.trim();
  box[0].value = '';

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
    box[0].disabled = true;
    prompt[0].innerHTML = "";
    box[0].style.display = "none";
  } else {
    promptUser();
  }
});

//start the actual thing
promptUser();
print("hint: " +steps[0].hint);


