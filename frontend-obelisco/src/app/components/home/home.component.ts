import { Component, OnInit, HostListener, ElementRef, ViewChild } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})

export class HomeComponent implements OnInit {

  @ViewChild('objetivo', { static: false })
  public objetivo: ElementRef;
  @ViewChild('missao', { static: false })
  public missao: ElementRef;
  @ViewChild('valores', { static: false })
  public valores: ElementRef;

  constructor() { }

  public ngOnInit(): void { window.scrollTo(0, 0); }

  @HostListener('window:scroll', [])
  public onWindowcheckScroll(): void {
    const scrollPosition = window.pageYOffset - 200;

    if (scrollPosition >= this.objetivo.nativeElement.offsetTop / 2) {
      this.objetivo.nativeElement.setAttribute('class', 'col-lg-8 text-center bounceIn animated');
    }
    if (scrollPosition >= this.missao.nativeElement.offsetTop / 2) {
      this.missao.nativeElement.setAttribute('class', 'col-lg-8 text-center bounceIn animated');
    }
    if (scrollPosition >= this.valores.nativeElement.offsetTop / 2) {
      this.valores.nativeElement.setAttribute('class', 'container bounceIn animated');
    }
  }
}
