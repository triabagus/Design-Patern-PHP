<?php

namespace RefactoringGuru\Composite\RealWorld;

/**
 * Kelas Komponen dasar menyatakan antarmuka untuk semua komponen konkret,  
 * keduanya sederhana dan kompleks.
 * 
 * Dalam contoh kita, kita akan fokus pada perilaku rendering elemen DOM
 */
abstract class FormElement
{
    /**
     * Kami dapat mengantisipasi bahwa semua elemen DOM memerlukan 3 bidang ini.
     */
    protected $name;
    protected $title;
    protected $data;

    public function __construct(string $name, string $title)
    {
        $this->name     = $name;
        $this->title    = $title;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setData():void
    {
        $this->data = $data;
    }

    public function getData():array
    {
        return $this->data;
    }

    /**
     * Setiap elemen DOM konkret harus memberikan implementasi rendering, tetapi
     * kita dapat dengan aman berasumsi bahwa semuanya mengembalikan string.
     */

    abstract public function render():string;
}

/**
 * Ini adalah komponen Leaf. Seperti semua Daun, ia tidak dapat memiliki anak.
 */
class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name,$title);
        $this->type = $type;
    }

    /**
     * Karena komponen Leaf tidak memiliki anak yang dapat menangani sebagian besar
     * pekerjaan untuk mereka, biasanya Daunlah yang melakukan yang paling berat
     * mengangkat dalam pola Composite.
     */

    public function render():string
    {
        return "<label for=\"{$this->name}\">{$this->title}</label>\n".
        "<input name=\"{$this->name}\" type=\"{$this->type}\" value=\"{$this->data}\">\n";
    }
}

/**
 * Kelas Composite dasar mengimplementasikan infrastruktur untuk mengelola anak
 * Object, digunakan kembali oleh semua Concrete Composites.
 */
abstract class FieldComposite extends FormElement
{
    /**
     * @var FormElement[]
     */
    protected $fields = [];

    /**
     * Dia metode untuk menambah / menghapus sub-objek.
     */
    public function add(FormElement $fields):void
    {
        $name = $fields->getName();
        $this->fields[$name] = $fields;
    }

    public function remove(FormElement $component):void
    {
        $this->fields = array_filter($this->fields, function ($child) use ($component){
            return $child != $component;
        });
    }

    /**
     * Sedangkan metode Leaf hanya melakukan pekerjaannya, metode Komposit hampir
     * selalu harus mempertimbangkan sub-objeknya.
     * 
     * Dalam hal ini, komposit dapat menerima data terstruktur.
     * 
     * param array $data
     */

    public function setData($data):void
    {
        foreach ($this->fields as $name => $fields){
            if(isset($data[$name])){
                $fields->setData($data[$name]);
            }
        }
    }

    /**
     * Logika yang sama berlaku untuk pengambil. Ini mengembalikan data terstruktur dari
     * komposit itu sendiri (jika ada) dan semua data anak-anak.
     */

    public function getData():array
    {
        $data = [];

        foreach($this->fields as $name => $fields ){
            $data[$name] = $fields->getData();
        }
    }

    /**
     * The base implementation of the Composite's rendering simply combines
     * results of all children. Concrete Composites will be able to reuse this
     * implementation in their real rendering implementations.
     */
    public function render(): string
    {
        $output = "";
        
        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }
        
        return $output;
    }
}

/**
 * The fieldset element is a Concrete Composite.
 */
class Fieldset extends FieldComposite
{
    public function render(): string
    {
        // Note how the combined rendering result of children is incorporated
        // into the fieldset tag.
        $output = parent::render();
        
        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}

/**
 * And so is the form element.
 */
class Form extends FieldComposite
{
    protected $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\">\n<h3>{$this->title}</h3>\n$output</form>\n";
    }
}

/**
 * The client code gets a convenient interface for building complex tree
 * structures.
 */
function getProductForm(): FormElement
{
    $form = new Form('product', "Add product", "/product/add");
    $form->add(new Input('name', "Name", 'text'));
    $form->add(new Input('description', "Description", 'text'));

    $picture = new Fieldset('photo', "Product photo");
    $picture->add(new Input('caption', "Caption", 'text'));
    $picture->add(new Input('image', "Image", 'file'));
    $form->add($picture);

    return $form;
}

/**
 * The form structure can be filled with data from various sources. The Client
 * doesn't have to traverse through all form fields to assign data to various
 * fields since the form itself can handle that.
 */
function loadProductData(FormElement $form)
{
    $data = [
        'name' => 'Apple MacBook',
        'description' => 'A decent laptop.',
        'photo' => [
            'caption' => 'Front photo.',
            'image' => 'photo1.png',
        ],
    ];

    $form->setData($data);
}

/**
 * The client code can work with form elements using the abstract interface.
 * This way, it doesn't matter whether the client works with a simple component
 * or a complex composite tree.
 */
function renderProduct(FormElement $form)
{
    // ..

    echo $form->render();

    // ..
}

$form = getProductForm();
loadProductData($form);
renderProduct($form);