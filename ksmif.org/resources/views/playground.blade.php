@extends('layout.app')

@section('content')
@vite('resources/js/monaco-editor.js')
<link rel="stylesheet" href="lib/monaco.css">
<main class="font-['Jersey10']">
    <header class="p-6">
        <p class="text-4xl">WELCOME TO KSM-IF</p>
        <p class="text-6xl">PlayGround!</p>
    </header>

    <section class="grid lg:grid-cols-2 mx-2" >
        <div hidden>{{--Soal--}}</div>
        <div>
            <form class="text-2xl">
                <label for="lang">Select Language</label>
                <select name="lang" id="lang" class="border-2">
                    <option value="c">C</option>
                    <option value="cpp">C++</option>
                    <option value="csharp">C#</option>
                    <option value="java">Java</option>
                    <option value="python">Python</option>
                    <option value="javascript" selected>JavaScript</option>
                </select>
            </form>

            <div id="filename"
                   class="p-2 pb-2 text-white bg-gray-900 w-fit rounded-t-md overflow-hidden">
                <input  class="min-w-5 field-sizing-content bg-transparent" value="main" required>
                <label>.js</label>
            </div>

            <div class="p-4 bg-gray-900 text-white">
                <div id="editor-container" class="w-full min-h-56 max-h-96"></div>
                <p class="p-1 pl-2 bg-gray-600 w-full">RESULT</p>
                <div class="overflow-scroll h-64 bg-gray-700">
                    <p id="result" class="p-2">></p>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
let filename  = "main";
let extension = "js";

$(window).on("load", function(){
    let editor = monaco.editor.create($('#editor-container')[0], {
        value: "console.log('Hello World!');",
        language: 'javascript',
        theme: 'vs-dark'
    });

    $('#filename input').on("change", function(){
        filename = $(this).val();
    });

    $("#lang").on("change", function(){
        let lang = $(this).val();
        let init = "";
        switch (lang) {
            case "c":
                extension = "c";
                init = `#include <stdio.h>\n\nint main(){\n\tprintf("Hello World!");\n\treturn 0;\n}`;
                break;
            case "cpp":
                extension = "cpp";
                init = `#include <iostream>\n\nusing namespace std;\n\nint main(){\n\tcout<<"Hello World!"<<endl;\n\treturn 0;\n}`;
                break;
            case "java":
                extension = "java";
                init = `public class main {\n\tpublic static void main(String[] args) {\n\t\tSystem.out.println("Hello World!");\n\t}\n}`;
                break;
            case "csharp":
                extension = "cs";
                init = `using System;\n\npublic class Main\n{\n\tpublic static void Main(string[] args)\n\t{\n\t\tConsole.WriteLine("Hello World!");\n\t}\n}`;
                break;
            case "python":
                extension = "py";
                init = `print("Hello World!")`;
                break;
            default:
                extension = "js";
                init = "console.log('Hello World!');";
                break;
        }

        $("#filename label").html(`.${extension}`);
        monaco.editor.setModelLanguage(editor.getModel(), lang);
        editor.setValue(init);
    });
});
</script>
@endsection
