# PostmarkBundle
Symfony2 bundle forked from [https://github.com/miguel250/PostmarkBundle](https://github.com/miguel250/PostmarkBundle)

## Addons

**Fake Attachment**
Attach fake text files

```php
/**
     * Add fake attachment
     *
     * @param string $file
     * @param string $filename  null
     * @param string $mimeType  null
     * @return Message
     */
    public function addFakeAttachment($file, $filename, $mimeType)
    {

        $this->attachments[] = array(
            'Name'        => $filename,
            'Content'     => base64_encode($file),
            'ContentType' => $mimeType
        );

        return $this;
    }
```

## Usage

**Message Service**
``` php
<?php
$message  = $this->get('postmark.message');
$message->addTo('test@gmail.com', 'Test Test');
$message->setSubject('subject');
$message->setHTMLMessage('<b>email body</b>');
$message->addFakeAttachment('Hello world', 'filename.txt', 'text/plain');
$response = $message->send();

?>
```