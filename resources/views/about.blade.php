@extends('layout.app')
@section('title', 'About Us')

@section('mainContent')
<!-- One -->
<section id="One">
    <div class="position-relative" style="background-image: url('/images/bg.jpg');
    height: 13rem;
    background-repeat: no-repeat; width: 100%;
    background-position: right bottom, left top;
    background-size: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="font-family: Serif;">
            <h1 class="text-white">Hope you are enjoying our blog !</h1>
            <hr style="margin: auto; height: 3px; opacity: 0.5; color: rgba(239, 239, 239, 1);">
        </div>
    </div>
</section>
<!-- Two -->
<section id="one" class="p-5">
    <div class="container">
        <div class="row text-center">
            <h1 class="p-2" style="font-family: Serif;">About Us</h1>
            <P class="p-2">What we do with the information we gather
                This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.

                However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.

                Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.

                What list you have
                Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.
                Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.
                Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.
                However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.

                This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space—and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</P>
        </div>
    </div>
</section>
@endsection
