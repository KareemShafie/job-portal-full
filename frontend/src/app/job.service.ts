import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../environments/environment'; 


@Injectable({
  providedIn: 'root',
})
export class JobService {
  private apiUrl = environment.apiUrl;

  constructor(private http: HttpClient) {}

  getJobs(filters: any = {}): Observable<any> {
  let params = new HttpParams();

  Object.keys(filters).forEach((key) => {
    if (filters[key] !== '' && filters[key] !== null && filters[key] !== undefined) {
      params = params.set(key, filters[key]);
    }
  });

  return this.http.get(this.apiUrl, { params });
}


  getJobById(id: number): Observable<any> {
    return this.http.get(`${this.apiUrl}/${id}`);
  }
}
