var none = document.getElementById("none");
var profile = document.getElementById("profile");
var family = document.getElementById("family");
var rules = document.getElementById("rules");
var user_info = document.getElementById("user-info-section");
var nigma_btn = document.getElementById("nigma_btn");
var arkham_btn = document.getElementById("arkham_btn");
var story_btn = document.getElementById("story_btn");
var tool_btn = document.querySelector("#tool_btn");
var lang_btn = document.querySelector("#lang_btn");
var git_btn = document.querySelector("#git_btn");
var songs_btn = document.querySelector("#songs_btn");

var profiler = document.getElementById("profiler");
var familer = document.getElementById("familier");
var rules_section = document.getElementById("rules_section");
var nigma = document.getElementById("nigma");
var arkham = document.getElementById("arkham");
var story = document.getElementById("story");
var tool = document.getElementById("tool");
var lang = document.getElementById("lang");
var git = document.getElementById("git");
var songs = document.getElementById("songs");



profiler.onclick = ()=>{
    profile.style.display = "block";
    user_info.style.display = "none";
    none.style.display = "none";
    nigma.style.display = "none";
    arkham.style.display = "none";
    story.style.display="none";
    lang.style.display = "none";
    git.style.display="none";
    tool.style.display = "none";
    songs.style.display="none";

    family.style.display = "none";
    rules.style.display = "none";
}

familer.onclick = ()=>{
    family.style.display = "block";
    none.style.display = "none";
    user_info.style.display = "none";
    nigma.style.display = "none";
    arkham.style.display = "none";
    story.style.display="none";
    lang.style.display = "none";
    git.style.display="none";
    tool.style.display = "none";
    songs.style.display="none";

    rules.style.display = "none";
    profile.style.display = "none";

}

rules_section.onclick = ()=>{
    rules.style.display = "block";
    family.style.display = "none";
    user_info.style.display = "none";
    nigma.style.display = "none";
    arkham.style.display = "none";
    story.style.display="none";

    lang.style.display = "none";
    git.style.display="none";
    tool.style.display = "none";
    songs.style.display="none";

    none.style.display = "none";
    profile.style.display = "none";
}

nigma_btn.onclick = ()=>{

    nigma.style.display = "block";
    rules.style.display = "none";
    family.style.display = "none";
    user_info.style.display = "none";
    none.style.display = "none";
    story.style.display="none";
    lang.style.display = "none";
    tool.style.display = "none";

    profile.style.display = "none";
    arkham.style.display = "none";
    git.style.display="none";
    songs.style.display="none";


}
arkham_btn.onclick = ()=>{
    arkham.style.display = "block";
    nigma.style.display = "none";
    rules.style.display = "none";
    family.style.display = "none";
    user_info.style.display = "none";
    none.style.display = "none";
    story.style.display="none";
    lang.style.display = "none";
    git.style.display="none";
    songs.style.display="none";

    tool.style.display = "none";

    profile.style.display = "none";
}
story_btn.onclick = ()=>{
    story.style.display="block";
    tool.style.display = "none";

    arkham.style.display = "none";
    nigma.style.display = "none";
    rules.style.display = "none";
    family.style.display = "none";
    user_info.style.display = "none";
    none.style.display = "none";
    profile.style.display = "none";
    lang.style.display = "none";
    git.style.display="none";
    songs.style.display="none";


}

    tool_btn.onclick = ()=>{
        tool.style.display = "block";
        story.style.display="none";
        arkham.style.display = "none";
        nigma.style.display = "none";
        rules.style.display = "none";
        family.style.display = "none";
        user_info.style.display = "none";
        none.style.display = "none";
        profile.style.display = "none";
        lang.style.display = "none";
        git.style.display="none";
        songs.style.display="none";


    }
    lang_btn.onclick = ()=>{
        lang.style.display = "block";
        tool.style.display = "none";
        story.style.display="none";
        arkham.style.display = "none";
        nigma.style.display = "none";
        rules.style.display = "none";
        family.style.display = "none";
        user_info.style.display = "none";
        none.style.display = "none";
        profile.style.display = "none";
        git.style.display="none";
        songs.style.display="none";


    }

git_btn.onclick = ()=>{
    git.style.display="block";
    lang.style.display = "none";
    tool.style.display = "none";
    story.style.display="none";
    arkham.style.display = "none";
    nigma.style.display = "none";
    rules.style.display = "none";
    family.style.display = "none";
    user_info.style.display = "none";
    none.style.display = "none";
    profile.style.display = "none";
    songs.style.display="none";


}
    
songs_btn.onclick = ()=>{
    songs.style.display="block";
    git.style.display="none";
    lang.style.display = "none";
    tool.style.display = "none";
    story.style.display="none";
    arkham.style.display = "none";
    nigma.style.display = "none";
    rules.style.display = "none";
    family.style.display = "none";
    user_info.style.display = "none";
    none.style.display = "none";
    profile.style.display = "none";

}
  

