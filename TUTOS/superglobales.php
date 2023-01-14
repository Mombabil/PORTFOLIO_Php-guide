<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Les superglobales Get, Post et Files PHP</title>
</head>

<body>
    <a href="../index.php">INDEX</a>
    <div class="les-superglobales block">
        <h2>Les superglobales Get Post et Files PHP</h2>
        <h4>Transmettre grâce aux formulaires HTML</h4>
        <p>Dans la majorité des cas, ce sont les formulaires HTML qui vont permettre la transmission de données dans un site web.</p>
        <h4>L'attribut name</h4>
        <p>Lorsqu'un champ de formulaire est configuré, cet attribut est important, car c'est sa valeur qui l'identifiera dans le script PHP cible.</p>
        <p>C'est la valeur de cet attribut qui définira la clé du tableau, $_POST ou $_GET.</p>
        <h4>L'attribut value</h4>
        <p>La valeur de cet attribut présent dans la définition de chaque champ permettra de définir la valeur associée à la clé name dans le tableau $_POST ou $_GET.</p>
        <div class="code-example">
            <code>input type="text" id="adress" name="adress" value="Rue des formulaires"</code>
        </div>
        <p>Lorsque ce formulaire sera traité par le serveur, nous pourrons alors afficher la valeur transmise sous cette forme :</p>
        <div class="code-example">
            <code>echo $_POST['adress']; <span class="comment">// affichera "Rue des formulaires"</span></code>
        </div>
        <p>La superglobale $_POST contient une valeur "Rue des formulaires" associée à la clé "address"</p>
        <h4>Transmettre un tableau</h4>
        <p>Dans certains cas, il est nécessaire de pouvoir transmettre plusieurs données pour un même champ de formulaire. C'est par exemple le cas lorsqu'un select multiple ou plusieurs cases à cocher sont présents dans un formulaire.</p>
        <p>Afin de pouvoir transmettre l'intégralité des valeurs sélectionnées, il convient de rajouter des crochets [ ] à la fin de la valeur de l'attribut name.</p>
        <div class="code-example">
            <code>
                form method="post" action="script.php"<br />
                input type="checkbox" name="languages[]" value="php" PHP<br />
                input type="checkbox" name="languages[]" value="js" JS<br />
                input type="checkbox" name="languages[]" value="perl" PERL<br />
                button type="submit" Send button<br />
                /form
            </code>
        </div>
        <p>Le fait de définir correctement l'attribut name pour chaque input : name="languages[]" permettra cette fois d'obtenir un tableau avec toutes les données.</p>
        <div class="code-example">
            <code>
                print_r($_POST['languages']); <span class="comment">// affichera Array ( [0] => php [1] => javascript [2] => perl ).</span>
            </code>
        </div>
        <h4>Méthode GET</h4>
        <p>Les données peuvent transiter d'une page à l'autre par l'intermédiaire de l'URL. Avec cette méthode, elles sont inscrites et donc visibles dans l'URL.</p>
        <p>Les paramètres seront ajoutés à la fin de l'URL et seront séparés de la partie principale par un "?". Si plusieurs données sont transmises, elles seront séparées entre elles par des "&" :</p>
        <code>https://url.php?firstname=john&lastname=doe&age=31.</code>
        <ul>
            <li><code>https://url.php</code> est l'URL dans son format initial, c'est l'URL du script qui recevra les données.</li>
            <li><code>?</code> indique que des paramètres vont être envoyés.</li>
            <li><code>firstname=john</code> est un premier paramètre ayant pour nom firstname et pour valeur john.</li>
            <li><code>&</code> indique un autre paramètre.</li>
        </ul>
        <p>Ces données vont avoir un but précis, afficher des informations, afficher une partie de la page et en cacher d'autres.</p>
        <h5>Manipulation en PHP</h5>
        <p>Les données transmises par l'URL seront réceptionnées par le script cible et stockées dans la variable superglobale $_GET.</p>
        <p>Il s'agit d'un tableau associatif dans lequel les clés correspondent aux noms des paramètres.</p>
        <div class="code-example">
            <code>a href="/script.php?firstname=john&lastname=doe&age=31" Envoi des données à script.php /a</code>
        </div>
        <p>Le lien ci-dessus permet d'envoyer les données firstname, lastname et age à script.php.</p>
        <p>Dans ce script, on pourrait ensuite imaginer vouloir afficher le contenu de $_GET. Cela se traduirait de cette façon :</p>
        <div class="code-example">
            <code>print_r($_GET); <span class="comment">// affichera Array ( [firstname] => john [lastname] => doe [age] => 31 )</span></code>
            <code>echo $_GET['lastname']; <span class="comment">// affichera 'doe'</span></code>
        </div>
        <h5>Modifications des paramètres de l'url</h5>
        <p>GET est la méthode la plus simple pour envoyer des données d'une page à l'autre. C'est aussi la plus dangereuse, car ces données sont visibles et facilement modifiables.</p>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">La modification des paramètres de l'URL peut entraîner des comportements inattendus ou des erreurs au niveau du code PHP.</p>
        <h5>Limite de taille d'une URL</h5>
        <p>Il faut également savoir que la taille d'une URL peut être limitée. Les normes n'indiquent pas de taille limite, car celle-ci provient des navigateurs ou serveurs web. Par exemple, Internet Explorer limite la longueur d'une URL à 2048 caractères.</p>
        <p>Si le besoin est de transmettre de nombreux paramètres, la méthode GET peut vite s'avérer inappropriée.</p>
        <h5>Insertion en base de données</h5>
        <p>Imaginons que les données transmises par l'URL à un script soient destinées à être insérées dans la base de données.</p>
        <p>Un utilisateur qui enregistrerait cette URL dans ses favoris ou qui rafraîchirait la page de manière incessante pourrait lancer plusieurs requêtes de création, modification ou suppression, sans vraiment en être conscient.</p>
        <p>Pire, cette URL deviendrait un allié de force à toute personne mal intentionnée qui aurait l'idée d'appeler l'URL un très grand nombre de fois.</p>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">Dans la pratique, la manipulation de la base de données avec la méthode GET est à éviter. Son utilisation doit se concentrer principalement sur l'affichage avec les contrôles appropriés.</p>
        <h4>Méthode POST</h4>
        <p>La seconde méthode que nous allons voir est POST. Nous n'utiliserons plus l'URL, mais des formulaires HTML, grâce auxquels les données transiteront à l'abri des regards indiscrets.</p>
        <p>Comme indiqué, les données sont transmises de manière masquée pour l'utilisateur. Elles sont en fait accessibles dans les outils <b>Console</b> et <b>Réseaux</b> du navigateur.</p>
        <h5>Taille des données</h5>
        <p>Avec POST, il n'y a pas de limite de taille des données à envoyer. En pratique, les serveurs web peuvent configurer une limite en nombre de champs à poster. Celle-ci est bien entendu modifiable.</p>
        <h5>Type de données</h5>
        <p>Contrairement à GET, il n'y a pas de limite de type de données à envoyer. Grâce à POST, il sera possible d'envoyer des fichiers.</p>
        <h5>Manipulation en PHP</h5>
        <p>Les données transmises par un formulaire seront réceptionnées par le script cible et stockées dans la variable superglobale $_POST. Comme pour GET, c'est un tableau associatif dans lequel les clés sont le nom des paramètres.</p>
        <p>Les clés de $_POST sont les valeurs des attributs name du formulaire HTML.</p>
        <p>Il est difficile de tester une requête post, car les données passées ne sont pas accessibles directement via le navigateur. L'utilisation d'outils comme Postman est conseillée. Il vous permettra de simuler tous types de requêtes.</p>
        <h4>Envoi de fichiers</h4>
        <p>Un formulaire HTML permet d'envoyer tous types de données, y compris des fichiers. Nous l'utilisons de plus en plus dans le cadre de la dématérialisation des données.</p>
        <h5>Formulaire HTML</h5>
        <p>Au niveau du formulaire, deux actions sont à réaliser </p>
        <ul>
            <li>ajouter l'attribut enctype="multipart/form-data"</li>
            <li>déclarer un champ input de type file</li>
        </ul>
        <div class="code-example">
            <code>
                form method="post" enctype="multipart/form-data"<br />
                label for="lastname" Lastname : /label<br />
                input type="text" id="lastname" name="lastname"<br />
                label for="cni" Upload ID Card : /label<br />
                input type="file" id="cni" name="cni"<br />
                /form
            </code>
        </div>
        <p style="border-top: 1px solid blue; background: rgb(197,222,235); padding: 12px 24px">L'attribut enctype sert à spécifier l'encodage des données. Par défaut, les données sont encodées de manière invisible pour l'utilisateur, mais, dans le cas d'un fichier, ce comportement pourrait corrompre son contenu. La valeur <b>multipart/form-data</b> sert ainsi à spécifier que le contenu du formulaire ne devra pas être encodé.</p>
        <p>L'envoi d'un fichier via un formulaire implique obligatoirement l'utilisation de la méthode POST.</p>
        <h4>Utilisation de $_FILES</h4>
        <p>La superglobale $_FILES permet de manipuler les informations sur le fichier dans le script PHP qui le recevra.</p>
        <p>Il s'agit d'un tableau associatif qui contient :</p>
        <ul>
            <li><b>name</b> : le nom du fichier, valeur de l'attribut HTML name</li>
            <li><b>type</b> : le type du fichier (png, jpeg, txt)</li>
            <li><b>tmp_name</b> : le nom et le répertoire temporaire du fichier</li>
            <li><b>error</b> : indique si une erreur est survenue lors de l'envoi</li>
            <li><b>size</b> : la taille du fichier en octets</li>
        </ul>
        <p>$_FILES est un tableau qui contient un autre tableau.</p>
        <p>L'accès à un fichier s'écrit $_FILES['monFichier'], l'accès aux informations du fichier s'écrit : $_FILES['monFichier']['attribut'].</p>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">PHP limite par défaut la taille des fichiers qu'il peut recevoir via la méthode POST (généralement 8 Mo). Cette valeur est modifiable dans la configuration du serveur.</p>
        <h5>Mécanisme d'envoi de fichiers</h5>
        <p>Une fois validé, le formulaire envoie les données vers la page spécifiée.</p>
        <p>À ce moment précis, les fichiers sont stockés dans un répertoire temporaire. Cela permet de laisser la liberté au développeur de contrôler le fichier avant son enregistrement définitif sur le serveur.</p>
        <p>Il est nécessaire de vérifier :</p>
        <ul>
            <li>si le fichier a bien été envoyé, grâce à la fonction isset() de PHP</li>
            <li>s'il n'y a pas eu d'erreurs pendant le téléchargement</li>
            <li>l'extension du fichier</li>
            <li>la taille du fichier</li>
        </ul>
        <p style="border-top: 1px solid red; background: rgb(252,210,211); padding: 12px 24px">Les fichiers portant l'extension <b>.php</b> doivent être interdits pour éviter l'exécution de scripts extérieurs.</p>
        <p>Voici un exemple de vérifications que vous pourriez apporter :</p>
        <div class="code-example">
            <code>$extensions = array('jpg', 'png', 'gif');</code>
            <code>
                if (isset($_FILES['cni'] && !$_FILES['cni']['error'])){<br />
                $fileInfo = pathinfo($_FILES['cni']['name']);<br />
                <br />
                if($_FILES['cni']['size']
                <= 2000000) {<br />
                if(in_array($fileInfo['extension'], $extensions)){<br />
                <span class="comment">// scripts a executer quand les controles sont bon</span><br />
                } else {<br />
                echo 'Ce type de fichier est interdit';<br />
                }<br />
                }else {<br />
                echo 'Le fichier dépasse la taille autorisée';<br />
                }<br />
                } else {<br />
                echo 'Une erreur est survenue lors de l'envoi du fichier';<br />
                }
            </code>
        </div>
        <ul>
            <li>Si le formulaire est validé sans le fichier ou s'il y a eu une erreur lors de l'envoi, le script affichera : Une erreur est survenue lors de l'envoi du fichier.</li>
            <li>Si la taille dépasse 2 Mo, dans notre cas, le script affichera : Le fichier dépasse la taille autorisée.</li>
            <li>Si l'extension du fichier ne fait pas partie de notre liste, le script affichera : Ce type de fichier est interdit.</li>
        </ul>
        <p>La dernière étape est l'enregistrement du fichier dans un dossier du serveur.</p>
        <p>Pour cela, il est possible d'utiliser la fonction move_uploaded_file() de PHP. Elle accepte deux paramètres :</p>
        <ul>
            <li>le nom et le répertoire temporaire : $_FILES['monFichier']['tmp_name']</li>
            <li>le nom et le répertoire définitif : $_FILES['monFichier']['name']</li>
        </ul>
    </div>
</body>

</html>