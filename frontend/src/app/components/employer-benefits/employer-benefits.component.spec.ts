import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EmployerBenefitsComponent } from './employer-benefits.component';

describe('EmployerBenefitsComponent', () => {
  let component: EmployerBenefitsComponent;
  let fixture: ComponentFixture<EmployerBenefitsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [EmployerBenefitsComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EmployerBenefitsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
