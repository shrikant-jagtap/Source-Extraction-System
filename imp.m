function t=imp(a1)
a = imread(a1);
%a = imread('m2.jpg');
%subplot(2,2,1);
%imshow(a);
b=ocr(a);
t=b.Text;

